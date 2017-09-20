<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*
         * 可以看到里面会有两个方法：authorize()和 rules() 。
         authorize()可以这样简单地理解：我们在处理这个表单请求(通常是一个post请求)
        的时候是否是需要进行身份验证，这种验证是指：比如A发表的评论，B能不能进行编辑。
        如果不能，则保留返回false，如果可以，则修改返回true。那么我们这里的逻辑是：
        既然是发表文章，在我们这个站点注册的用户(如果开放注册的话)都是可以发表文章的，
        所以我们首先修改authorize()方法，将其返回值改为：return true;。
        */
        //        return false;
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
            'title'=>'required|min:6',
            'content'=>'required',
            'published_at'=>'required'
        ];
        //添加与编辑有不一样的字段时候
//        $rules=[
//            'title'=>'required|min:6',
//            'content'=>'required',
//            'published_at'=>'required'
//        ];
//        if(isEdit()){
//            $rules['intro']='required'
//        }
//
//        return $rules;
    }
}
