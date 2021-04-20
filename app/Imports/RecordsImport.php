<?php

namespace App\Imports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\ToModel;

class RecordsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Record([
            'entity_name'=> $row[7] ?? '',
            'registration_incorporation_date'=> $row[36] ?? '',
            'paid_up_capital1_ordinary'=> $row[68] ?? '',
            'uen_of_audit_firm1'=> $row[58] ?? '',
            'name_of_audit_firm1'=> $row[45] ?? '',
            'address_type'=> $row[9] ?? '',
            'street_name'=> $row[3] ?? '',
            'building_name'=> $row[17] ?? '',
            'block'=> $row[20] ?? '',
            'unit_no'=> $row[51] ?? '',
            'company_type_description'=> $row[55] ?? '',
            'primary_ssic_code'=> $row[42] ?? '',
            'primary_ssic_description'=> $row[1] ?? '',
            'secondary_ssic_code'=> $row[12] ?? '',
            'secondary_ssic_description'=> $row[19] ?? '',
        ]);
    }
}
