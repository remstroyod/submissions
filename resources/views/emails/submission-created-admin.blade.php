<h1>{!! sprintf('%s, %s', __('Hello'), __('Admin')) !!}</h1>

<table>
    <tbody>
    <tr>
        <td>{{ $submission->name }}</td>
    </tr>
    <tr>
        <td>{{ $submission->email }}</td>
    </tr>
    <tr>
        <td>{{ $submission->message }}</td>
    </tr>
    </tbody>
</table>
