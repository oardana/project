@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container">
            <h1 class="text-center"> Parking data</h1>
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>License Plate</th>
                                <th></th>
                                <th>name</th>
                                <th class="text-right">price</th>
                                <th class="text-right">quantity</th>
                                <th class="text-right">total</th>
                                <th>adda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2018-09-29 05:57</td>
                                <td>100398</td>
                                <td>iPhone X 64Gb Grey</td>
                                <td class="text-right">$999.00</td>
                                <td class="text-right">1</td>
                                <td class="text-right">$999.00</td>
                                <td>lasda</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection