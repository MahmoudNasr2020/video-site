<?php

namespace App\DataTables;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Comment;
use App\Models\Video;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class commentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {

        $id = request()->route()->parameters('admin.video.edit') ;

        $comment = Comment::where('video_id',$id);

        //$comment = $video->comments;


        return datatables()->eloquent($comment)->

        addColumn('username',function($data){

            return $data->user->name;

            //return empty($data->user)?'non' :$data->user->name;

        })->
        addColumn('edit',function($data){

            return '<div id='.$data->id.' class="updateComment"><i class="fas fa-edit" style="color: #00c851 !important;cursor: pointer;"></i></div>';

            //return empty($data->user)?'non' :$data->user->name;

        })->
        addColumn('delete',function($data){


            return '<div id='.$data->id.' class="deleteComment"><i class="fas fa-trash-alt"  style="color: #ff3547 !important;cursor: pointer;"></i></div>';

            //return empty($data->user)?'non' :$data->user->name;

        })

        ->rawColumns(['username','edit','delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\comment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Video $model)
    {

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
                        Button::make(['extend'=>'reload','text'=>'<i class="fas fa-sync-alt"></i>'])
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

            Column::make('comment'),
            Column::make('username'),
            Column::make('created_at'),
            Column::make('edit'),
            Column::make('delete'),
           // Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'comment_' . date('YmdHis');
    }
}
