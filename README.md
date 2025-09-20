Tracking Treasures And College Tales

A Lost & Found Management Platform designed for college campuses to streamline the process of reporting, retrieving, and managing lost items. The system connects students who lose belongings with those who find them, reducing inefficiencies of traditional lost-and-found offices and promoting a more connected campus community.

📖 Project Overview

Managing lost and found items in colleges often relies on bulletin boards, offices, or scattered online posts, which are inefficient, outdated, and inconvenient. This project introduces a centralized digital platform where:
Students can report lost items with descriptions and images.
Finders can submit found items and connect with rightful owners.
Administrators can validate and manage posts through a dedicated dashboard.
The system ensures security, scalability, and inclusivity while providing a smooth and user-friendly experience for students and staff alike.

✨ Features

⦁	Lost & Found Posting – Upload detailed item descriptions with photos.

⦁	Admin Validation – Only legitimate posts are approved and visible.

⦁	Centralized Retrieval Page – Easy browsing of lost/found items.

⦁	User & Admin Dashboards – Separate views for students and administrators.

⦁	Item Categorization – Organize items into categories (electronics, clothing, etc.).

⦁	Secure Data Handling – Protects user data and privacy.

⦁	Scalable Design – Supports growing user base without performance loss.

⚙️ System Architecture

The system consists of:

User Interface (UI) – Students upload item details and search for lost/found items.

Admin Dashboard – Validates posts and updates item statuses.

Database (MySQL) – Stores user data, item information, and statuses.

Backend (PHP + SQL) – Handles authentication, form processing, and data management.

Frontend (HTML + CSS) – Provides a responsive and intuitive user interface.

🖥️ Technology Stack

    Frontend: HTML, CSS
    
    Backend: PHP
    
    Database: MySQL
    
    Web Server: Apache (v2.4+)
    
    IDE: Visual Studio Code
    
    OS: Windows Server (deployment), Windows 7+ (development)

⚙️ Requirements

Software

⦁	Windows Server (hosting)

⦁	Apache 2.4 or higher

⦁	MySQL (for DB management)

⦁	PHP (backend scripting)

⦁	Visual Studio Code (development IDE)

Hardware

⦁	Processor: Intel i3 or higher

⦁	RAM: 4 GB minimum (8 GB recommended)

⦁	Disk: 50 GB free space

🚀 Installation & Usage
1. Clone Repository
   
		git clone https://github.com/rollamani1212/Tracking-Treasures-and-College-Tales.git
		cd tracking

3. Setup Web Server

		Install XAMPP or WAMP (Apache + MySQL + PHP).

		Place project files in the htdocs directory.

4. Configure Database

		Create a MySQL database.

		Import provided SQL schema (lost_found_items table).

5. Run the Application

		Open browser and visit:

		http://localhost/project/home.html

6. Features Flow

		Users: Submit lost/found item details with images.

		Admins: Log in to validate and approve submissions.

		Public: View and search approved items on the retrieval page.
