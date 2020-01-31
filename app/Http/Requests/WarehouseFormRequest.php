<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseFormRequest extends FormRequest
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
            // 'IDWarehouseType' => 'required',
            'Name' => 'required',
            'Phone' => 'required',
    // 'Location' => 'required',
            'Address' => 'required',
            'Email' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'Name.required' => __('warehouse.msg_name_required'),
            // 'IDWarehouseType.required' => __('warehouse.msg_warehouse_type_required'),
            'Phone.required' => __('phone.msg_alamat_required'),
            'Alamat.required' => __('warehouse.msg_alamat_required'),
            // 'Location.required' => __('warehouse.msg_lokasi_required'),
            'Email.required' => __('warehouse.msg_email_required')
        ];
    }
}
