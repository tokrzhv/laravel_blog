<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id', // check for exists
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
            'preview_image' => 'file',
            'main_image' => 'required|file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title data must be a string.',
            'content.required' => 'The content field is required.',
            'content.string' => 'The content data must be a string.',
            'category_id.required' => 'The content field is required.',
            'category_id.integer' => 'The category Id  must be an integer.',
            'category_id.exists' => 'The category Id  must be exists in db.',
            'tag_ids.array' => 'The tag field is array.',
            'tag_ids.integer' => 'The tag Id  must be an integer.',
            //'preview_image.required' => 'The preview field is required.',
            'preview_image.file' => 'The preview must be a file.',
            'main_image.required' => 'The main image field is required.',
            'main.file' => 'The main image must be a file.',
        ];
    }
}
