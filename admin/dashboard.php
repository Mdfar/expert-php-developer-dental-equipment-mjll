<?php // Secure Admin Panel for Dental Equipment Management require_once('../includes/auth.php'); check_admin_access(); ?>

<!DOCTYPE html>

<html lang="en"> <head> <title>Staqlt Dental Admin</title> <link rel="stylesheet" href="../assets/css/admin.css"> </head> <body> <div class="admin-sidebar"> <h2>Dental Dashboard</h2> <ul> <li><a href="inventory.php">Manage Equipment</a></li> <li><a href="orders.php">Active Orders</a></li> <li><a href="users.php">Clinic Accounts</a></li> </ul> </div> <main class="content"> <h1>Inventory Overview</h1> <div class="stats-grid"> <div class="card">Total Products: 1,200</div> <div class="card">Low Stock Alerts: 5</div> <div class="card">Pending Sales: $45k</div> </div> </main> </body> </html>