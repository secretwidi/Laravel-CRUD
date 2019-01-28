<br>
@foreach ($supplier as $supplierlist)
<form action="{{ route('Supplier.update',
$supplierlist->supplier_id) }}" method="post">

{{ csrf_field() }}
{{ method_field('PUT')}}
<br>
    <input type="text"
    name="txt_name"
    value="{{ $supplierlist->name }}" />
    <br>
    <input type="text"
    name="txt_address"
    value="{{ $supplierlist->address }}" />
    <br>
    <input type="text"
    name="txt_telp"
    value="{{ $supplierlist->telp }}" />
<br>
@endforeach
<br>
<button type="submit">Submit</button>
<a href="{{ url('Supplier') }}" >
<br>
Back
</a>
