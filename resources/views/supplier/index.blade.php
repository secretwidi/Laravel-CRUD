
@foreach ($supplier as $supplierlist)

{{ $supplierlist->supplier_id }}
{{ $supplierlist->name }}
{{ $supplierlist->address }}
{{ $supplierlist->telp }}
<br>
<a href="Supplier/{{ $supplierlist->supplier_id }}">show</a>
<br />
<a href="Supplier/{{ $supplierlist->supplier_id }}/edit">edit</a>

<form action="Supplier/{{$supplierlist->supplier_id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE')}}
<button>Hapus</button>
</form>
@endforeach

<br>
<a href="{{ url('Supplier/create') }}" >
Back
</a>
