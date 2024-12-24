<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    {{ $slot }}

    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        form input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        form button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        table th,
        table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        table td {
            vertical-align: middle;
        }

        table button {
            padding: 6px 10px;
            margin: 0 5px;
            font-size: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table button:hover {
            opacity: 0.9;
        }

        table button:nth-child(1) {
            background-color: #4CAF50;
            /* Complete/Undo */
            color: white;
        }

        table button:nth-child(2) {
            background-color: #FFA500;
            /* Edit */
            color: white;
        }

        table button:nth-child(3) {
            background-color: #FF4136;
            /* Delete */
            color: white;
        }

        input[type="text"] {
            width: 100%;
            padding: 6px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .task-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 400px;
            /* Adjust width as needed */
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .task-search,
        .task-filter {
            width: 100%;
            padding: 8px;
            margin: 0;
            /* Controlled by gap in parent */
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        .task-search:focus,
        .task-filter:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .create-task-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .create-task-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button-group {
            display: flex;
            gap: 10px;
        }

        .button-group button {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .back-button {
            padding: 10px 20px;
            background: #666;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        /* General Layout */
        div {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        /* Header Section */
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
            font-weight: bold;
            padding: 6px 12px;
            background-color: #f0f0f0;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e0e0e0;
        }

        /* Search Bar */
        .task-search {
            width: 100%;
            padding: 8px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Posts Table */
        .posts-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .posts-table th,
        .posts-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .posts-table th {
            background-color: #f0f0f0;
            color: #333;
        }

        .posts-table td {
            background-color: #fff;
        }

        .posts-table button {
            padding: 6px 12px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .posts-table button:hover {
            background-color: #0056b3;
        }

        .posts-table input {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Empty State */
        .text-center {
            text-align: center;
            font-style: italic;
            color: #888;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            text-decoration: none;
            color: #007bff;
            padding: 8px 12px;
            margin: 0 5px;
            background-color: #f0f0f0;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #e0e0e0;
        }
    </style>

</body>

</html>