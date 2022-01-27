<?php

namespace App\Jobs;

use App\Mail\result;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MatchSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {

       $this->id=$id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $id=$this->id;
        $customer=Customer::with('priceList')->find($id);

        $customer->step=5;

        $customer->update();


        $email=$customer->email;
       $rand2 =  rand(00000,99999);
       $idd =  base64_encode($id);

        $host='https://'.\request()->getHost()."/report/$idd?id=$rand2";
        $pdf = \PDF::loadView('pdf.report',compact('host','customer'));

       // return view('pdf.report',compact('host','customer'));
        $rand= rand(0, 99999999999999);
        $path = public_path('pdf');
        $fileName = $rand . '.' . 'pdf' ;
        $pdf->save($path . '/' . $fileName);
         \Mail::to($email)->send(new result($rand));
    }
}
