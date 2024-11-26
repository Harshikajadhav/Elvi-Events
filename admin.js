document.addEventListener("DOMContentLoaded", function() {
    let menuicn = document.querySelector(".menuicn");
    let nav = document.querySelector(".navcontainer");

    if (menuicn && nav) {
        menuicn.addEventListener("click", () => {
            nav.classList.toggle("navclose"); // Toggle the navclose class
        });
    } else {
        console.error('menuicn or navcontainer not found in the DOM.');
    }
});












document.addEventListener("DOMContentLoaded", function() {
    const uploadBtn = document.getElementById('add-new-btn'); // Update this line with the correct button ID
    const tableBody = document.querySelector('.report-body tbody');

    // Handle uploading new wedding details
    uploadBtn.addEventListener('click', function() {
        const title = document.getElementById('new-title').value;
        const descp = document.getElementById('new-descp').value;
       
        const location = document.getElementById('new-location').value;
        const weddingDate = document.getElementById('new-wedding-date').value;

        if (title && descp && location && weddingDate) {
            const newRow = document.createElement('tr');
            newRow.className = 'report-entry';

            newRow.innerHTML = `
                <td class="title">${title}</td>
                <td class="descp">${descp}</td>
             
                <td class="location">${location}</td>
                <td class="wedding-date">${weddingDate}</td>
                <td class="tools">
                    <button class="edit-btn"><i class="material-icons">edit</i></button>
                    <button class="delete-btn"><i class="material-icons">delete</i></button>
                </td>
            `;

            tableBody.appendChild(newRow);

            // Clear the form fields
            document.getElementById('new-title').value = '';
            document.getElementById('new-descp').value = '';
           
            document.getElementById('new-location').value = '';
            document.getElementById('new-wedding-date').value = '';
        } else {
            alert('Please fill out all fields.');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const uploadBtn = document.getElementById('upload-btn');
    const tableBody = document.querySelector('#uploads-table tbody');

    // Handle uploading photos and adding to the table
    uploadBtn.addEventListener('click', function () {
        const weddingName = document.getElementById('wedding-name').value;
        const weddingDate = document.getElementById('wedding-date').value;
        const photoFolder = document.getElementById('photo-folder').files;
        const driveURL = document.getElementById('drive-url').value;

        // Validate inputs
        if (weddingName && weddingDate && (photoFolder.length > 0 || driveURL)) {
            const newRow = document.createElement('tr');

            // Create table cells with the provided data
            newRow.innerHTML = `
                <td>${weddingName}</td>
                <td>${weddingDate}</td>
                <td>${photoFolder.length ? photoFolder[0].webkitRelativePath.split('/')[0] : `<a href="${driveURL}" target="_blank">Google Drive</a>`}</td>
                <td>
                    <button class="edit-btn"><i class="material-icons">edit</i></button>
                    <button class="delete-btn"><i class="material-icons">delete</i></button>
                </td>
            `;

            // Append the new row to the table body
            tableBody.appendChild(newRow);

            // Clear the input fields
            document.getElementById('wedding-name').value = '';
            document.getElementById('wedding-date').value = '';
            document.getElementById('photo-folder').value = '';
            document.getElementById('drive-url').value = '';
        } else {
            alert('Please fill out all fields.');
        }
    });

    // Handle editing and deleting entries
    tableBody.addEventListener('click', function (event) {
        const currentRow = event.target.closest('tr');

        if (event.target.closest('.edit-btn')) {
            // Extract current data
            const weddingName = currentRow.children[0].textContent;
            const weddingDate = currentRow.children[1].textContent;
            const uploadSource = currentRow.children[2].textContent;

            // Populate the form with current data
            document.getElementById('wedding-name').value = weddingName;
            document.getElementById('wedding-date').value = weddingDate;

            if (uploadSource.includes('Google Drive')) {
                document.getElementById('drive-url').value = currentRow.querySelector('a').href;
                document.getElementById('photo-folder').value = '';
            } else {
                document.getElementById('photo-folder').value = uploadSource;
                document.getElementById('drive-url').value = '';
            }

            // Remove the current row (it will be replaced after editing)
            currentRow.remove();
        } else if (event.target.closest('.delete-btn')) {
            currentRow.remove();
        }document.addEventListener('DOMContentLoaded', function() {
            // Example Google Sheets API URL (change this to your actual URL)
            const sheetURL = 'https://sheets.googleapis.com/v4/spreadsheets/YOUR_SHEET_ID/values/Sheet1?key=YOUR_API_KEY';
        
            // Fetch client data from Google Sheets
            function fetchClientData() {
                fetch(sheetURL)
                    .then(response => response.json())
                    .then(data => {
                        const rows = data.values.slice(1); // Skip the header row
                        const pendingTableBody = document.querySelector('#pending-clients tbody');
                        const confirmedTableBody = document.querySelector('#confirmed-clients tbody');
        
                        rows.forEach(row => {
                            const [primaryContactName, bridesName, groomsName, contactNo, weddingDate, status] = row;
        
                            const rowElement = document.createElement('tr');
                            rowElement.innerHTML = `
                                <td>${primaryContactName}</td>
                                <td>${bridesName}</td>
                                <td>${groomsName}</td>
                                <td>${contactNo}</td>
                                <td>${weddingDate}</td>
                                ${status === 'Pending' ? `
                                    <td>
                                        <button class="accept-btn" data-email="${contactNo}">Accept</button>
                                        <button class="reject-btn" data-email="${contactNo}">Reject</button>
                                    </td>
                                ` : ''}
                            `;
        
                            if (status === 'Pending') {
                                pendingTableBody.appendChild(rowElement);
                            } else {
                                confirmedTableBody.appendChild(rowElement);
                            }
                        });
        
                        // Handle accept/reject actions
                        document.querySelectorAll('.accept-btn').forEach(button => {
                            button.addEventListener('click', () => handleStatusChange(button.dataset.email, 'Confirmed'));
                        });
                        document.querySelectorAll('.reject-btn').forEach(button => {
                            button.addEventListener('click', () => handleStatusChange(button.dataset.email, 'Rejected'));
                        });
                    });
            }
        
            function handleStatusChange(email, newStatus) {
                // Logic to update the status in Google Sheets
                // This typically involves a POST request to a Google Apps Script web app endpoint
        
                // Example POST request (replace URL with your Google Apps Script endpoint)
                fetch('https://script.google.com/macros/s/YOUR_SCRIPT_ID/exec', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ email, status: newStatus }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload the client data
                        location.reload();
                    } else {
                        alert('Failed to update status');
                    }
                });
            }
        
            fetchClientData();
        });
        
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const pendingClients = [];
    const confirmedClients = [];

    // Open the form to manually add a client
    const openFormBtn = document.getElementById('open-form-btn');
    const manualEntryForm = document.getElementById('manual-entry-form');
    const addClientBtn = document.getElementById('add-client-btn');

    openFormBtn.addEventListener('click', () => {
        manualEntryForm.style.display = manualEntryForm.style.display === 'none' ? 'block' : 'none';
    });

    // Add a client to the pending list manually
    addClientBtn.addEventListener('click', () => {
        const primaryContactName = document.getElementById('primary-contact-name').value;
        const bridesName = document.getElementById('brides-name').value;
        const groomsName = document.getElementById('grooms-name').value;
        const contactNo = document.getElementById('contact-no').value;
        const weddingDate = document.getElementById('wedding-date').value;

        if (primaryContactName && bridesName && groomsName && contactNo && weddingDate) {
            const client = { primaryContactName, bridesName, groomsName, contactNo, weddingDate };
            pendingClients.push(client);
            renderClients();
            clearForm();
        } else {
            alert('Please fill in all fields');
        }
    });

    function clearForm() {
        document.getElementById('primary-contact-name').value = '';
        document.getElementById('brides-name').value = '';
        document.getElementById('grooms-name').value = '';
        document.getElementById('contact-no').value = '';
        document.getElementById('wedding-date').value = '';
    }

    // Render the tables with clients
    function renderClients() {
        renderClientTable('pending-clients', pendingClients, true);
        renderClientTable('confirmed-clients', confirmedClients, false);
    }

    // Function to render clients in a specific table
    function renderClientTable(tableId, clients, showActions) {
        const tableBody = document.querySelector(`#${tableId} tbody`);
        tableBody.innerHTML = '';

        clients.forEach((client, index) => {
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${client.primaryContactName}</td>
                <td>${client.bridesName}</td>
                <td>${client.groomsName}</td>
                <td>${client.contactNo}</td>
                <td>${client.weddingDate}</td>
                ${showActions ? `
                <td>
                    <button class="accept-btn" data-index="${index}">Accept</button>
                    <button class="reject-btn" data-index="${index}">Reject</button>
                </td>` : ''}
            `;

            tableBody.appendChild(row);
        });

        if (showActions) {
            document.querySelectorAll('.accept-btn').forEach(button => {
                button.addEventListener('click', handleAccept);
            });

            document.querySelectorAll('.reject-btn').forEach(button => {
                button.addEventListener('click', handleReject);
            });
        }
    }

    function handleAccept(event) {
        const index = event.target.getAttribute('data-index');
        const client = pendingClients.splice(index, 1)[0];
        confirmedClients.push(client);
        renderClients();
    }

    function handleReject(event) {
        const index = event.target.getAttribute('data-index');
        pendingClients.splice(index, 1);
        renderClients();
    }

    // Simulate data fetching from a website (For demo purposes only)
    // fetch('https://jsonplaceholder.typicode.com/users')
    //     .then(response => response.json())
    //     .then(data => {
    //         data.forEach(user => {
    //             const client = {
    //                 primaryContactName: user.name,
    //                 bridesName: user.username,
    //                 groomsName: user.username + ' Jr.',
    //                 contactNo: user.phone,
    //                 weddingDate: new Date().toISOString().split('T')[0] // Use today's date
    //             };
    //             pendingClients.push(client);
    //         });
    //         renderClients();
    //     })
    //     .catch(error => console.error('Error fetching data:', error));
});
document.addEventListener("DOMContentLoaded", function () {
    const guests = [];

    const showFormBtn = document.getElementById('show-form-btn');
    const formContainer = document.getElementById('form-container');
    const closeFormBtn = document.getElementById('close-form-btn');
    const guestForm = document.getElementById('guest-form');
    const guestTableBody = document.querySelector('#guest-table tbody');

    showFormBtn.addEventListener('click', function () {
        formContainer.classList.remove('hidden');
    });

    closeFormBtn.addEventListener('click', function () {
        formContainer.classList.add('hidden');
    });

    guestForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const guestName = document.getElementById('guest-name').value;
        const guestEmail = document.getElementById('guest-email').value;

        if (guestName && guestEmail) {
            const guest = { guestName, guestEmail, status: 'pending' };
            guests.push(guest);
            renderGuests();
            guestForm.reset();
            formContainer.classList.add('hidden');
        } else {
            alert('Please fill in all fields');
        }
    });

    function renderGuests() {
        guestTableBody.innerHTML = '';

        guests.forEach((guest, index) => {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${guest.guestName}</td>
                <td>${guest.guestEmail}</td>
                <td>${guest.status}</td>
                <td>
                    <button class="action-btn attending-btn" data-index="${index}">Accept</button>
                    <button class="action-btn pending-btn" data-index="${index}">Reject</button>
                </td>
            `;
            guestTableBody.appendChild(newRow);
        });

        // Add event listeners to action buttons
        document.querySelectorAll('.attending-btn').forEach(button => {
            button.addEventListener('click', handleAccept);
        });

        document.querySelectorAll('.pending-btn').forEach(button => {
            button.addEventListener('click', handleReject);
        });
    }

    function handleAccept(event) {
        const index = event.target.getAttribute('data-index');
        guests[index].status = 'attending';
        renderGuests();
    }

    function handleReject(event) {
        const index = event.target.getAttribute('data-index');
        guests[index].status = 'pending';
        renderGuests();
    }
});
