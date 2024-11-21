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
            <div class="table-responsive">
                <table id="contact_table"
                    class="table table-row-bordered table-row-gray-600 table-striped table-hover gy-5 rounded dataTable">
                    <thead>
                        <tr>
                            <th scope="col"> Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="w-50">Message</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($contacts->count() > 0)

                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
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
        $('#contact_table').DataTable({
            'order': []
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