@extends('layouts.app')

@section('content')
        <div id="main" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ваши документы</h1>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Название</td>
                            <td>Дата последнего изменения</td>
                            <td>Статус</td>
                            <td><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Моя крутая дипломная работа со длинным названием</td>
                            <td>25.05.2016</td>
                            <td>Готово</td>
                            <td><a href="#"><span class="glyphicon glyphicon glyphicon-log-in" aria-hidden="true"></span></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Моя крутая дипломная работа со длинным названием авпиавыпиываулоправоыдлпиыщвопаы</td>
                            <td>25.05.2016</td>
                            <td>Нуждается в подтверждении</td>
                            <td><a href="#"><span class="glyphicon glyphicon glyphicon-log-in" aria-hidden="true"></span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection
