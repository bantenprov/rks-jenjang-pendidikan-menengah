<?php namespace Bantenprov\RKSJenPenMgh\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RKSJenPenMgh\Facades\RKSJenPenMgh;

/* Models */
use Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh\RKSJenPenMgh as PdrbModel;
use Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh\Province;
use Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh\Regency;

/* etc */
use Validator;

/**
 * The RKSJenPenMghController class.
 *
 * @package Bantenprov\RKSJenPenMgh
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenMghController extends Controller
{

    protected $province;

    protected $regency;

    protected $rks_jen_pen_mgh;

    public function __construct(Regency $regency, Province $province, PdrbModel $rks_jen_pen_mgh)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rks_jen_pen_mgh     = $rks_jen_pen_mgh;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $rks_jen_pen_mgh = $this->rks-jen-pen-mgh->find($id);

        return response()->json([
            'negara'    => $rks-jen-pen-mgh->negara,
            'province'  => $rks-jen-pen-mgh->getProvince->name,
            'regencies' => $rks-jen-pen-mgh->getRegency->name,
            'tahun'     => $rks-jen-pen-mgh->tahun,
            'data'      => $rks-jen-pen-mgh->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->rks-jen-pen-mgh->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rks-jen-pen-mgh->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

