@extends('layouts.parent')

@section('style')
<style>
    .table td,
    .table th {
        font-size: 10px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Зүтгүүрийн зохицуулагч</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Бүртгэл</a></li>
                <li class="breadcrumb-item active">Зүтгүүрийн зохицуулагч</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="#" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down" data-toggle="modal"
                data-target="#exampleModal"> <i class="fa fa-plus" aria-hidden="true"></i> Тайлан үүсгэх</a>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                     
                    </div>
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table table-bordered vm"
                            style="font-size:10px; color:black; word-wrap:break-word;">
                            <thead style="background-color:#ceedf9; font-size: 10px;">
                                <tr>
                                    <th>№</th>
                                    <th rowspan="2">Бригадын нэрс</th>
                                    <th rowspan="2">И/т дугаар</th>
                                    <th rowspan="2">И/т дугаар</th>
                                    <th rowspan="2"> Ажил дууссан</th>
                                    <th colspan="2">Амарсан цаг</th>
                                    <th rowspan="2">И/т дугаар</th>
                                    <th rowspan="2">Явка</th>
                                    <th colspan="2">Амарсан цаг</th>
                                    <th rowspan="2">Тэмдэглэл</th>
                                </tr>
                                <tr>
                                    <th> план</th>
                                    <th> факт</th>
                                    <th> план</th>
                                    <th> факт</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let activeID = 0
    function td_clicked(dom_id) {
        if (activeID != dom_id) {
            closeInput(false)
            let td = $('#td_'+dom_id)
            let val = td.html()
            let input = $("<input id='input_"+dom_id+"' type='number' value='"+val+"'/>")
            td.empty().append(input)
            input.select()
        }
        activeID = dom_id
    };

    $(document).keypress(function(e){
        if(e.keyCode == 13) {
            closeInput(true)
        } else if(e.keyCode == 43) {
            closeInput(false)
        }
    });

    function closeInput(jumpNext) {
        if (activeID != 0) {
            let td = $('#td_'+activeID)
            let salary_id = td.closest('tr').attr('tag') // salary id tr-n tag-s avna
            let columnNo = activeID%15
            let val = $('#input_'+activeID).val()
            $.get('update_salary/'+salary_id+'/'+columnNo+'/'+val, function(data) {
                console.log(data) // for debug: print query
            })
            td.empty().append(val)
            let next = activeID+1
            if(columnNo==1 || columnNo==14) { // dundaj tsalin baival dood morluu shiljne
                next = next+1
            }
            activeID = 0
            if(jumpNext) {
                $('#td_'+next).trigger('click')
            }
        }
    }
</script>
@endsection