<tr>
    <th scope="row">{{ $contact['id'] }}</th>
    <td>{{ $contact['fname'] }}</td>
    <td>{{ $contact['phone'] }}</td>
    <td>{{ $contact['email'] }}</td>
    <td>{{ $contact['company'] }}</td>
    <td>
        <div class="d-flex gap-1">
            <button class="btn btn-outline-info"><i class="bi bi-eye"></i></button>
            <button class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
            <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
        </div>
    </td>
</tr>
