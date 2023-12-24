@foreach ($employees as $employee)
    <tr class="table-tr-border">
        <td class="custom-paragraph-color">{{ $employee->name }}</td>
        <td class="custom-number-color">{{ employeeSlotCount($employee->id) }}</td>
        <td class="custom-paragraph-color">{{ $employee->phone }}</td>
        <td class="text-primary">{{ $employee->email }}</td>
        <td class="text-primary">{{ $employee->street }}</td>
        <td class="text-primary">{{ $employee->appartment }}</td>
        <td class="text-primary">{{ $employee->city }}</td>
        <td class="text-primary">{{ $employee->state }}</td>
        <td class="text-primary">{{ $employee->zip_code }}</td>
        <td style="width:200px; display:flex; justify-content:center">
            <a href="{{ route('admin.create_avibility_employee',$employee->id) }}" class="request-button">Edit <i class="fas fa-edit"></i> </a>
            <button class="request-button ml-2">Request</button>
        </td>
    </tr>
@endforeach
