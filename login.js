function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var dashboard = document.getElementById("dashboard");

    // Example user roles
    var users = {
        admin: { password: "admin123", role: "Admin" },
        client: { password: "client123", role: "Client" },
        guest: { password: "guest123", role: "Guest" }
    };

    // Check if the username exists
    if (users[username]) {
        // Check if password matches
        if (users[username].password === password) {
            var userRole = users[username].role;
            showDashboard(userRole);
        } else {
            dashboard.innerHTML = "<p style='color: red;'>Invalid password</p>";
        }
    } else {
        dashboard.innerHTML = "<p style='color: red;'>User not found</p>";
    }
}

function showDashboard(role) {
    var dashboard = document.getElementById("dashboard");

    if (role === "Admin") {
        dashboard.innerHTML = "<h3>Welcome Admin</h3><p>You have full access to the system.</p>";
    } else if (role === "Client") {
        dashboard.innerHTML = "<h3>Welcome Client</h3><p>You can view and manage your orders.</p>";
    } else if (role === "Guest") {
        dashboard.innerHTML = "<h3>Welcome Guest</h3><p>You can browse the system with limited access.</p>";
    }
}