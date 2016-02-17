<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecCat extends Model {

    use SoftDeletes;

    protected $table = 'SpecCat';

    protected $fillable = ['name', 'ids'];

    //����� ��������� �� �������������
    public function spec()
    {
        return $this->hasMany('App\Models\Specialisty', 'cats');
    }

    //�������� ����������� �� �����
    public function site()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }

}
