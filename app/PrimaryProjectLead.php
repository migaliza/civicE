<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrimaryProjectLead extends Model
{
    //
    protected $role;
	protected $status;
	protected $fName;
	protected $lName;
	protected $gender;
	protected $citizenship;
	protected $graduation;
	protected $major;
	protected $phoneNumber;
	protected $ressidentialAddress;
	protected $ashesiEmail;
	protected $alternativeEmail;
    protected $GPA;//is it greater than 2.3 yes/ no
    protected $housing;
    protected $department;
    protected $jobTitle;
}
