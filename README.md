# Water Tank Level Monitoring and Control System
## Project Description

This project aims to create a water tank level monitoring and control system using ESP32 microcontroller, XAMPP server, and a set of sensors. The system provides real-time monitoring of the water level in the tank through a web interface, allowing users to track and manage their water consumption efficiently. Additionally, it includes a smart control mechanism that automatically shuts off the water supply if any user exceeds their allocated limit.

The main components of the system include:

- **ESP32 microcontroller:** Acts as the central hub for collecting data from various sensors and controlling the solenoid valve.
- **Ultrasonic sensor:** Measures the water level in the tank accurately by emitting ultrasonic waves and calculating the distance to the water surface.
- **Flow sensor:** Detects the flow rate of water passing through the pipeline, enabling precise measurement of consumption for each user.
- **Solenoid valve:** Controls the water flow by opening or closing the tap based on user limits and consumption data.
- **XAMPP server:** Hosts a local web server to display the water tank level, user consumption details, and control options.

## Features

- **Real-time water tank level display:** The system constantly measures the water level using the ultrasonic sensor and updates the web interface with the current level.
- **User allocation and consumption tracking:** Users can set their water usage limits through the web interface, and the system tracks their consumption using the flow sensor. It provides visual feedback on individual consumption levels.
- **Automatic tap shut-off:** If a user exceeds their allocated limit, the system automatically shuts off the tap by controlling the solenoid valve. This prevents wastage and encourages responsible water usage.
- **Historical data storage:** The system records and stores historical water consumption data in a MySQL database hosted by XAMPP. Users can review their usage patterns and identify trends.
- **Interactive web interface:** The web page presents an intuitive and user-friendly interface to view water tank levels, consumption details, and control options. It incorporates HTML, CSS, and PHP to enable dynamic updates.

## Repository Structure

- /esp_code: Contains the Arduino code for the ESP32 microcontroller. It includes the necessary libraries and implements the logic for sensor readings, control actions, and data transmission to the XAMPP server.
- /xampp_web_page_code: Contains the PHP files and MySQL database setup required for hosting the local web server. It includes scripts for data storage, retrieval, and web page rendering.Contains the HTML and CSS files responsible for the user interface design and interactive elements. It defines the layout, styles, and dynamic behavior of the web page.

## Usage

- Set up the XAMPP server on your local machine and configure the MySQL database according to the provided instructions in /xampp_web_page_code.
- Connect the ESP32 microcontroller to the appropriate sensors (ultrasonic, flow, and solenoid valve) following the wiring diagram provided in /ESP32_Code.
- Upload the Arduino code from /ESP32_Code to the ESP32 microcontroller using the Arduino IDE or platform of your choice.
Copy the PHP files from /xampp_web_page_code to the appropriate directory in your XAMPP installation.
- Modify the necessary parameters in the Arduino code and PHP files to match your local server settings, database credentials, and sensor pin connections.
- Launch the XAMPP server and open the web interface in a web browser to monitor the water tank level, set user limits, and control the tap.

## Dependencies

- ESP32 board support for Arduino IDE
(installable via the Arduino Library Manager)

- Ultrasonic sensor library (e.g., NewPing)
- XAMPP server with Apache and MySQL

## Future Enhancements

- **Mobile app integration:** Develop a mobile application to provide remote access to the water tank monitoring and control system.
- **Real-time notifications:** Implement push notifications or email alerts to notify users about their consumption status or any system anomalies.
- **Machine learning-** based water usage prediction: Utilize machine learning algorithms to predict and optimize water usage patterns based on historical data.
- **Integration with smart home platforms:** Integrate the system with popular smart home platforms (e.g., Google Home, Amazon Alexa) for voice-based control and automation.


##### Feel free to tailor this project description to your specific implementation details and add any additional features or enhancements. Good luck with your project!
## License
 License by MIT
