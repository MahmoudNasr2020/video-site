<?php

namespace App\DataTables;

use App\contact;
use App\Models\Contact as ModelsContact;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class contactDataTable extends DataTable
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
            ->addColumn('created', function($data){

                $created_at = $data->created_at->diffForHumans();

                return $created_at;
            })->
            addColumn('updated', function($data){

                $updated_at = $data->updated_at->diffForHumans();

                return $updated_at;
            })->
            addColumn('replay', function($data){

                 return '<div class="replay" data-id='.$data->id.' style="cursor:pointer;margin-left:
                  15px;color: chartreuse;"><i class="fas fa-reply"></i></div>';
            })
            ->addColumn('delete', function($data){

                 return '<div class="delete" data-id='.$data->id.' style="cursor:pointer;
                 margin-left: 15px;color: red;"><i class="fas fa-trash-alt"></i></div>';
            })
            ->addColumn('show', function($data){

                 return '<div class="show" data-id='.$data->id.' style="cursor:pointer;
                 margin-left: 15px;color: #007cba;"><i class="fas fa-eye"></i></div>';
            })
            ->
            rawColumns(['created_at','replay','delete','show']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\contact $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ModelsContact $model)
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
                    ->setTableId('contact-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0)
                    ->buttons(
                        Button::make(['extend'=>'print','text'=>'<i class="fas fa-print"></i>']),
                        Button::make(['extend'=>'reload','text'=>'<i class="fas fa-sync"></i>'])
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
            Column::make('email'),
            Column::make('created'),
            Column::make('updated'),
            Column::make('replay'),
            Column::make('delete'),
            Column::make('show'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'contact_' . date('YmdHis');
    }
}
