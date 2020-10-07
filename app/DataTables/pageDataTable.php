<?php

namespace App\DataTables;

use App\Models\Page;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class pageDataTable extends DataTable
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
            ->eloquent($query)
            ->addColumn('edit', function($data){
                return '<div class="btn btn-success update"  id='.$data->id.'  style="width: 22px;"><i class="fas fa-edit"  style="position: relative; right: 5px;"></i></div>';
            })->
             addColumn('delete', function($data){
                return '<div class="btn btn-danger delete" id='.$data->id.'  style="width: 22px;"><i class="fas fa-trash-alt"  style="position: relative; right: 5px;"></i></div>';
            })->
            rawColumns(['edit','delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\page $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(page $model)
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
                    ->setTableId('page-table')
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
            Column::make('name'),
            Column::make('desc'),
            Column::make('meta_desc'),
            Column::make('created_at'),
            Column::make('updated_at'),
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
        return 'page_' . date('YmdHis');
    }
}
