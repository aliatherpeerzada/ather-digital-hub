<x-admin.layouts title="Dashboard">

    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Contact Details</a>
        </li>
         
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Newsletters</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
            <div class="mb-4" style="max-width: 300px;">
                <label for="contactDateFilter" class="form-label fw-bold">Filter by Created Date:</label>
                <input type="date" id="contactDateFilter" class="form-control">
            </div>
            <div class="table-responsive">
                <table id="contact_table"
                    class="table table-row-bordered table-row-gray-600 table-striped table-hover gy-5 rounded dataTable">
                    <thead>
                        <tr>
                            <th scope="col"> Date</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Alt Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Budget</th>
                            <th scope="col" class="w-25">Message</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($contacts->count() > 0)

                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->additional_number }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->company }}</td>
                                    <td>{{ $contact->budget }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <form action="{{ route('contact.delete', $contact->id) }}" method="POST"
                                            class="d-inline" id="contact_form_{{ $contact->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm"
                                                id="{{ $contact->id }}"
                                                onclick="contact_delete({{ $contact->id }})"><i
                                                    class="bi bi-trash fs-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
         
        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
            <div class="table-responsive">
                <table id="new_letter_table"
                    class="table table-row-bordered table-row-gray-600 table-striped table-hover gy-5 rounded dataTable">
                    <thead>
                        <tr>

                            <th scope="col" class="w-75"> Email</th>

                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($newsletters->count() > 0)

                            @foreach ($newsletters as $newsletter)
                                <tr>
                                    <td>{{ $newsletter->subscription_email }}</td>

                                    <td>
                                        <form action="{{ route('newsletter.delete', $newsletter->id) }}" method="POST"
                                            class="d-inline" id="new_letter_form_{{ $newsletter->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm"
                                                id="b_delete_{{ $newsletter->id }}"
                                                onclick="newsletter_delete({{ $newsletter->id }})"><i
                                                    class="bi bi-trash fs-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-admin.layouts>
<script>
    $(document).ready(function() {
        
        // Custom filtering function which will search data in column 0 (Date)
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                if (settings.nTable.id !== 'contact_table') {
                    return true;
                }
                var filterDate = $('#contactDateFilter').val();
                var tableDate = data[0]; // Date is in column 0
                
                if (!filterDate) {
                    return true;
                }
                
                return tableDate === filterDate;
            }
        );

        var contactTable = $('#contact_table').DataTable({
            'order': [[0, 'desc']] // Sort by date descending by default
        });
        
        $('#contactDateFilter').on('change', function() {
            contactTable.draw();
        });

        $('#new_letter_table').DataTable({
            'order': []
        });

        $('#package_table').DataTable({
            'order': []
        });

    });

    function contact_delete(contactId) {

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('contact_form_' + contactId).submit();
            }
        });
    }

    function newsletter_delete(newsletterId) {

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('new_letter_form_' + newsletterId).submit();
            }
        });
    }

    function package_delete(packageId) {

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('package_form_' + packageId).submit();
            }
        });
    }
</script>