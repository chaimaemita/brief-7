<?php
 
    $payments = [
    [
        'name'  =>  'Karthi',
        'Payment Schedule'  =>  'First',
        'Bill Number'  =>  '00012223',
        'Amount Paid'=>  'DHS 100,000',
        'Balance amount' => 'DHS 500,000',
        'Date' => '05-Jan, 2022'
    ],
    [
        'name'  =>  'Karthi',
        'Payment Schedule'  =>  'First',
        'Bill Number'  =>  '00012223',
        'Amount Paid'=>  'DHS 100,000',
        'Balance amount' => 'DHS 500,000',
        'Date' => '05-Jan, 2022'
    ],
    [
        'name'  =>  'Karthi',
        'Payment Schedule'  =>  'First',
        'Bill Number'  =>  '00012223',
        'Amount Paid'=>  'DHS 100,000',
        'Balance amount' => 'DHS 500,000',
        'Date' => '05-Jan, 2022'
    ],
    [
        'name'  =>  'Karthi',
        'Payment Schedule'  =>  'First',
        'Bill Number'  =>  '00012223',
        'Amount Paid'=>  'DHS 100,000',
        'Balance amount' => 'DHS 500,000',
        'Date' => '05-Jan, 2022'
    ]
    ];
foreach ($payments as  $payment) {
    echo ' <div class="card" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title text-center">'.$payment['name'].'</h5>
              <p class="card-text text-center"> Payment schedule:'.$payment['Payment Schedule'].'</p>
              <p class="card-text text-center">Bill number:'.$payment['Bill Number'].'</p>
              <p class="card-text text-center">Amount Paid:'.$payment['Amount Paid'].'</p>
              <p class="card-text text-center">Balance amount:'.$payment['Balance amount'].'</p>
              <p class="card-text text-center">'.$payment['Date'].'</p>
              <a href="#" class="btn btn-info w-100"> <i style="color: white;" class="bi bi-eye  pe-3"></i></a>
            </div>
          </div>
'; 

}        
?>
              