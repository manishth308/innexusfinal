<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ChatbotController extends Controller
{
    public function ask(Request $request): JsonResponse
    {
        $request->validate(['message' => 'required|string|max:500']);

        $query = trim($request->input('message'));
        $keywords = collect(preg_split('/\s+/', strtolower($query)))
            ->filter(fn ($w) => strlen($w) > 2)
            ->values();

        if ($keywords->isEmpty()) {
            return $this->fallback();
        }

        // Try FAQs first — direct question/answer match
        $faqMatch = Faq::where('is_active', true)
            ->where(function ($q) use ($keywords) {
                foreach ($keywords as $word) {
                    $q->orWhere('question', 'like', "%{$word}%");
                }
            })
            ->orderBy('sort_order')
            ->first();

        if ($faqMatch) {
            return response()->json([
                'answer' => $faqMatch->answer,
                'source' => 'faq',
            ]);
        }

        // Fall back to Page title/meta_description match, point them to the page
        $pageMatch = Page::where(function ($q) use ($keywords) {
                foreach ($keywords as $word) {
                    $q->orWhere('title', 'like', "%{$word}%")
                      ->orWhere('meta_description', 'like', "%{$word}%");
                }
            })
            ->first();

        if ($pageMatch) {
            return response()->json([
                'answer' => "You might find what you're looking for on our \"{$pageMatch->title}\" page.",
                'link' => url($pageMatch->slug),
                'source' => 'page',
            ]);
        }

        return $this->fallback();
    }

    private function fallback(): JsonResponse
    {
        return response()->json([
            'answer' => "I couldn't find an exact answer to that. Would you like to reach out to our team directly?",
            'link' => url('/contact'),
            'source' => 'fallback',
        ]);
    }
}