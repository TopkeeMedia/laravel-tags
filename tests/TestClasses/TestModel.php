<?php

namespace Topkee\Tags\Test\TestClasses;

use Illuminate\Database\Eloquent\Model;
use Topkee\Tags\HasTags;

class TestModel extends Model
{
    use HasTags;

    public $table = 'test_models';

    protected $guarded = [];

    public $timestamps = false;
}
