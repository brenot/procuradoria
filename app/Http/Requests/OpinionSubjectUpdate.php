<?php

namespace App\Http\Requests;

use App\Rules\IdNotEqualsToParentId;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class OpinionSubjectUpdate extends OpinionSubjectStore
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('opinion-subjects:update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'parent_id' => new IdNotEqualsToParentId(
                $this->get('id'),
                $this->get('parent_id')
            ),
        ];
    }
}
