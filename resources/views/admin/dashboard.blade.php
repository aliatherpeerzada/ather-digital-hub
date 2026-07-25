<x-admin.layouts title="Dashboard">

    <div class="row g-5 mb-8">
        <div class="col-xl-6">
            <div class="card shadow-sm border-0 bg-primary text-white" style="background: linear-gradient(135deg, #111 0%, #222 100%);">
                <div class="card-body p-5 d-flex align-items-center justify-content-between">
                    <div>
                        <div class="fs-6 fw-semibold text-gray-400 mb-2">Total Contacts</div>
                        <div class="fs-2hx fw-bold" style="color: #D4AF37;">{{ $contacts->count() }}</div>
                    </div>
                    <i class="bi bi-people fs-3x" style="color: #D4AF37;"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-sm border-0 bg-success text-white" style="background: linear-gradient(135deg, #111 0%, #222 100%);">
                <div class="card-body p-5 d-flex align-items-center justify-content-between">
                    <div>
                        <div class="fs-6 fw-semibold text-gray-400 mb-2">Total Newsletters</div>
                        <div class="fs-2hx fw-bold" style="color: #D4AF37;">{{ $newsletters->count() }}</div>
                    </div>
                    <i class="bi bi-envelope-paper fs-3x" style="color: #D4AF37;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header border-0 pt-5 bg-white">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Data Management</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Manage your contacts and newsletters</span>
            </h3>
        </div>
        <div class="card-body py-3">
            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6 fw-bold">
                <li class="nav-item">
                    <a class="nav-link active text-active-primary" data-bs-toggle="tab" href="#kt_tab_pane_1">Contact Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary" data-bs-toggle="tab" href="#kt_tab_pane_3">Newsletters</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                    <div class="d-flex align-items-center mb-5 bg-light p-4 rounded justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-date fs-2 me-3 text-primary"></i>
                            <div class="d-flex align-items-center" style="max-width: 400px;">
                                <label for="contactDateFilter" class="form-label fw-bold me-3 mb-0 text-nowrap">Filter by Created Date:</label>
                                <input type="date" id="contactDateFilter" class="form-control form-control-solid">
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger" id="bulkDeleteBtn" style="display:none;" onclick="bulk_delete_contacts()">
                            <i class="bi bi-trash fs-4 me-2"></i>Delete Selected
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table id="contact_table" class="table table-row-bordered table-row-gray-300 align-middle gs-0 gy-4 dataTable">
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 rounded-start w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" id="selectAllContacts" />
                                        </div>
                                    </th>
                                    <th class="min-w-50px">Actions</th>
                                    <th class="min-w-100px">Date</th>
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-125px">Phone</th>
                                    <th class="min-w-125px">Alt Phone</th>
                                    <th class="min-w-150px">Email</th>
                                    <th class="min-w-125px">Company</th>
                                    <th class="min-w-100px">Budget</th>
                                    <th class="rounded-end min-w-200px">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="ps-4">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input contact-checkbox" type="checkbox" value="{{ $contact->id }}" />
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('contact.delete', $contact->id) }}" method="POST" class="d-inline" id="contact_form_{{ $contact->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" onclick="contact_delete({{ $contact->id }})">
                                                    <i class="bi bi-trash fs-3"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td><span class="badge badge-light-primary fw-bold">{{ $contact->created_at->format('Y-m-d') }}</span></td>
                                        <td class="fw-semibold text-gray-800">{{ $contact->name }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->additional_number ?: '-' }}</td>
                                        <td><a href="mailto:{{ $contact->email }}" class="text-gray-600 text-hover-primary">{{ $contact->email }}</a></td>
                                        <td>{{ $contact->company ?: '-' }}</td>
                                        <td>{{ $contact->budget ?: '-' }}</td>
                                        <td class="text-gray-600 pe-4">{{ Str::limit($contact->message, 50) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                    <div class="table-responsive">
                        <table id="new_letter_table" class="table table-row-bordered table-row-gray-300 align-middle gs-0 gy-4 dataTable">
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 rounded-start min-w-200px">Email Address</th>
                                    <th class="min-w-150px">Subscribed On</th>
                                    <th class="rounded-end min-w-100px text-end pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsletters as $newsletter)
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <span class="symbol-label bg-light-success text-success fw-bold fs-6">{{ strtoupper(substr($newsletter->subscription_email, 0, 1)) }}</span>
                                                </div>
                                                <a href="mailto:{{ $newsletter->subscription_email }}" class="text-gray-800 text-hover-primary mb-1 fw-bold fs-6">{{ $newsletter->subscription_email }}</a>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-light-info fw-bold">{{ $newsletter->created_at ? $newsletter->created_at->format('Y-m-d') : '-' }}</span></td>
                                        <td class="text-end pe-4">
                                            <form action="{{ route('newsletter.delete', $newsletter->id) }}" method="POST" class="d-inline" id="new_letter_form_{{ $newsletter->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" onclick="newsletter_delete({{ $newsletter->id }})">
                                                    <i class="bi bi-trash fs-3"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin.layouts>
<script>
    $(document).ready(function() {
        
        // Custom filtering function which will search data in column 2 (Date)
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                if (settings.nTable.id !== 'contact_table') {
                    return true;
                }
                var filterDate = $('#contactDateFilter').val();
                var tableDate = data[2]; // Date is in column 2
                
                if (!filterDate) {
                    return true;
                }
                
                return tableDate.includes(filterDate);
            }
        );

        var contactTable = $('#contact_table').DataTable({
            'order': [[2, 'desc']], // Sort by date descending by default
            'columnDefs': [
                { 'orderable': false, 'targets': [0, 1] } // Disable sorting on checkbox and action columns
            ]
        });
        
        $('#contactDateFilter').on('change', function() {
            contactTable.draw();
        });

        // Handle Select All Checkbox
        $('#selectAllContacts').on('change', function() {
            var isChecked = $(this).prop('checked');
            $('.contact-checkbox').prop('checked', isChecked);
            toggleBulkDeleteBtn();
        });

        // Handle individual checkbox changes
        $(document).on('change', '.contact-checkbox', function() {
            if (!$(this).prop('checked')) {
                $('#selectAllContacts').prop('checked', false);
            }
            toggleBulkDeleteBtn();
        });

        function toggleBulkDeleteBtn() {
            if ($('.contact-checkbox:checked').length > 0) {
                $('#bulkDeleteBtn').fadeIn();
            } else {
                $('#bulkDeleteBtn').fadeOut();
            }
        }

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

    function bulk_delete_contacts() {
        var selectedIds = [];
        $('.contact-checkbox:checked').each(function() {
            selectedIds.push($(this).val());
        });

        if (selectedIds.length === 0) return;

        Swal.fire({
            title: 'Are you sure?',
            text: "You are about to delete " + selectedIds.length + " contacts. This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete them all!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Create a form dynamically and submit
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("contact.bulk_delete") }}';

                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                selectedIds.forEach(function(id) {
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'ids[]';
                    input.value = id;
                    form.appendChild(input);
                });

                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>