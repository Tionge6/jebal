<?php

declare(strict_types=1);
namespace App\Http\Controllers\Bookmarks;
use App\Actions\Bookmarks\CreateBookmarkAndTags;
use App\Http\Requests\Bookmarks\StoreRequest;
use Illuminate\Http\RedirectResponse;
class StoreController
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        (new CreateBookmarkAndTags())->handle(
            request: $request->all(),
            id: auth()->id(),
        );
        return redirect()->route('dashboard');
    }
}