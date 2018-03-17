@extends('template')
@section('containt')
<div class="pull-right">
    <a href="{{ url('form') }}" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kolom Header</th>
            <th>Kolom Header</th>
            <th>Kolom Header</th>
            <th>Kolom Header</th>
            
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Kolom Header</td>
                <td>Kolom Header</td>
                <td>Kolom Header</td>
                <td>Kolom Header</td>
            </tr>
    </tbody>
</table>
@endsection