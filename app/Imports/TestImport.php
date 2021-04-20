<?php

namespace App\Imports;

use App\Models\Test;
use Maatwebsite\Excel\Concerns\ToModel;

class TestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Test([
            'Region'=> $row[0] ?? '',	
            'CountryItemType'=> $row[1] ?? '',
            'SalesChannel'=> $row[2] ?? '',	
            'OrderPriority'=> $row[3] ?? '',
            'OrderDate'=> $row[4] ?? '',	
            'OrderID'=> $row[5] ?? '',	
            'ShipDate'=> $row[6] ?? '',	
            'UnitsSold'=> $row[7] ?? '',	
            'UnitPrice'=> $row[8] ?? '',	
            'UnitCost'=> $row[9] ?? '',	
            'TotalRevenue'=> $row[10] ?? '',	
            'TotalCost'=> $row[11] ?? '',	
            'TotalProfit'=> $row[12] ?? '',
        ]);
    }
}
