<?php

namespace App\DataTables;

use App\Models\Video;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class videoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {


        return datatables()
            ->eloquent($query)->

            addColumn('created', function($data){

                $created_at = $data->created_at->diffForHumans();

                return $created_at;
            })->

            addColumn('updated', function($data){

                $updated_at = $data->updated_at->diffForHumans();

                return $updated_at;
            })->
            addColumn('edit', function($data){
                return '<a href="'.route("admin.video.edit",$data->id).'"><div class="btn btn-success update"  id='.$data->id.'  style="width: 22px;"><i class="fas fa-edit"
                 style="position: relative; right: 5px;"></i></div></a>';
            })->
             addColumn('delete', function($data){
                return '<div class="btn btn-danger delete" id='.$data->id.'
                style="width: 22px;"><i class="fas fa-trash-alt"  style="position: relative; right: 5px;"></i></div>';
            })->
            addColumn('muslim_name', function ($data) {
                return $data->muslim->name;
            })->
            addColumn('cat_name', function ($data) {
                return $data->cat->name;
            })->
            rawColumns(['muslim_name','edit','delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\video $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Video $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('video-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make(['extend'=>'export','text'=>'<i class="fas fa-download"></i>']),
                        Button::make(['extend'=>'print','text'=>'<i class="fas fa-print"></i>']),
                        Button::make(['extend'=>'reload','text'=>'<i class="fas fa-sync"></i>']),
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('status'),
            Column::make('desc'),
            Column::make('muslim_name'),
            Column::make('cat_name'),
            Column::make('meta_key'),
            Column::make('meta_desc'),
            Column::make('created'),
            Column::make('updated'),
            Column::computed('edit')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
             Column::computed('delete')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'video_' . date('YmdHis');
    }
}
