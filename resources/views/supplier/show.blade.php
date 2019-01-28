
@foreach ($supplier as $supplierlist)

{{ $supplierlist->supplier_id }}
{{ $supplierlist->name }}
{{ $supplierlist->address }}
{{ $supplierlist->telp }}

<br />
@endforeach

<a href="{{ url('Supplier') }}" >
Back
</a>
