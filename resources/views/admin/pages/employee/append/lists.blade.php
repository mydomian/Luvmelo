@foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ employeeSlotCount($employee->id) }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->street }}</td>
            <td>{{ $employee->appartment }}</td>
            <td>{{ $employee->city }}</td>
            <td>{{ $employee->state }}</td>
            <td>{{ $employee->zip_code }}</td>

            <td style="display:flex; justify-content-between">
                <a href="{{ route('admin.create_avibility_employee',$employee->id) }}" class="btn btn-sm btn-info">Edit <i class="fas fa-edit"></i> </a>
                <button class="btn btn-sm btn-info ml-2">Request</button>
            </td>
        </tr>

@endforeach
