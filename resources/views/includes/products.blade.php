    @foreach ($products as $product)
        <tr class="products">
            <td>{{ $loop->index +1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->qty }}</td>
            <td class="total">{{ $product->total }}</td>
            <td><button type="button" onclick="removeRow({{ $product->id }})"  class="btn btn-sm btn-danger">Remove</button></td>
        </tr>
    @endforeach
