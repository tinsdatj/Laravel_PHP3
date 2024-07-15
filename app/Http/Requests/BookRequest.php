<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $validates = [];
        $method = $this->route()->getActionMethod();
        switch ($this->method()){
            case 'POST':
                switch ($method){
                    case 'add_book':
                        $validates = [
                            "title" => 'required',
                            'thumbnail' => 'required',
                            'author' => 'required',
                            'publisher' => 'required',
                            'publication'=> 'required',
                            'price'=> 'required',
                            'quality'=> 'required',
                            'category_id'=> 'required',
                        ];
                        break;
                    case 'edit':
                        $validates = [
                            "name" => 'required',
                            "phone" => 'required',
                            "address" => 'required',
                        ];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }
        return $validates;
    }
    public  function messages()
    {
        return [
            'title.required' => "Vui lòng điền tiêu đề",
            'thumbnail.required' => "Vui lòng điền ảnh minh họa",
            'author.unique' => "Vui lòng điền tên tác giả",
            'publisher.required' => "Vui lòng điền nhà xuất bản",
            'publication.required' => "Vui lòng điền ngày xuất bản",
            'price.required' => "Vui lòng điền gia tiền",
            'quality.required' => "Vui lòng điền số lượng",
            'category_id.required' => "Vui lòng chọn danh mục",
        ];
    }
}
