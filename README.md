# 🎓 Alumni Tracking System (ATS)

A centralized web-based platform for tracking alumni across 33 colleges (7 Government + 26 Aided) under the Directorate of Higher Education.

## 📌 Overview

Every year, over 10,000 students graduate from these colleges. However, there is no unified system to track their professional progress. This application enables:

- Alumni self-registration & updates
- College admin verification of alumni
- Directorate-level search and communication
- Event & notice publishing
- Group chat and messaging

---

## 🧑‍💻 Tech Stack

- **Frontend**: HTML, CSS, Bootstrap, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Communication**: SMTP / PHP Mailer (for emails)
- **Authentication**: PHP Sessions

---

## 🧩 Features

### 👨‍🎓 Alumni
- Register and create profile
- Update personal, academic, and employment details
- View college events and notices
- Join group chats
- Receive emails and messages

### 🏫 College Admin
- Login securely
- Verify & authenticate alumni registrations
- Post college-specific events and notices
- Search alumni based on college, year, branch

### 🏛 Directorate
- Perform advanced alumni search (by year, subject, college)
- Send bulk messages and event invites
- Publish global notices
- Monitor alumni progress across institutions

---

## 🗃️ Database Schema

### `alumini`  
Stores alumni records with fields like name, college, year, employment, etc.

### `credentials`  
Stores login credentials for authentication.

### `event`  
College and Directorate events visible to alumni.

### `notice`  
Announcements targeted to department/college.

---


## 🗂️ Project Structure

ATS/
├── index.php # Login Page
├── partials/
│ ├── admin/
│ │ ├── ad-events.php # Create/view events
│ │ ├── ad-notice.php # Post/view notices
│ │ ├── ad-search-al.php # Search alumni
│ │ └── ad-verify-reg.php # Verify alumni
│ └── alumini/
│ ├── al_reg.php # Registration form
│ ├── al-updateProfile.php # Update profile
│ ├── al-events.php # View events
│ ├── al-notice.php # View notices
│ └── al-gchat.php # Group chat



---

## 🛠️ How to Run

1. Clone this repository
   ```bash
   git clone https://github.com/yourusername/ats.git

2. Import the MySQL database using ats.sql file via phpMyAdmin or CLI.

3. Start your local PHP server

4. Open http://localhost:8000 in your browser.


## 🔐 Sample Credentials
1. Alumni

- Email: harrykhambe@gmail.com

- Password: harry@123

2. Admin

Email: haridas@gmail.com

Password: hari@123

## ✨ Future Enhancements
- with REST API Architecture)