<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Markdown\Markdown;

class ArticleCreateRequest extends FormRequest
{
    protected $markdown;
    public function __construct(Markdown $markdown) {

        $this->markdown = $markdown;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }

    public function afterRequest()
    {
        return [
            'title' => $this->title,
            'summary' => $this->summary,
            'content' => $this->contents,
            'resolved_content' => $this->markdown->toHtml($this->contents),
            'cover' => $this->cover,
            'user_id' => Auth::id(),
            'tags' => explode(',', $this->tags),
        ];
    
    }

}
