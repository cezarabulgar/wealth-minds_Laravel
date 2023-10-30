<?php 

require_once "connectDatabase.php";

// Create a new database
// $dname = "Financial_Education_Courses";
// $sql="CREATE DATABASE IF NOT EXISTS $dname";

// if($conn->query($sql)===true){
//     echo "Database created successfuly";
// } else {
//     echo "Error creating database." .$conn->error;
// }

// $conn->close();


// Establish a connection to the created database
$dname = "Financial_Education_Courses";
$conn = new mysqli($servername, $username, $password, $dname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the courses_categories table
$sql = "CREATE TABLE IF NOT EXISTS courses_categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100)
)";

if ($conn->query($sql) === true) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Reset the AUTO_INCREMENT value for the id column
$sql = "ALTER TABLE courses_categories AUTO_INCREMENT=1";

if ($conn->query($sql) === true) {
    echo "AUTO_INCREMENT value reset successfully";
} else {
    echo "Error resetting AUTO_INCREMENT value: " . $conn->error;
}

// Insert values into courses_categories table
$sql = "INSERT INTO courses_categories(name) VALUES
    ('Beginner'),
    ('Intermediate'),
    ('Advanced')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}


//Create the financial_courses table
// $sql = "CREATE TABLE IF NOT EXISTS financial_courses (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     Title VARCHAR(200),
//     Description VARCHAR(600),
//     Structure VARCHAR(1000),
//     Instructor VARCHAR(100),
//     Duration INT,
//     Price DECIMAL(10,2),
//     category_id INT,
//     FOREIGN KEY (category_id) REFERENCES courses_categories(id)
// )";

// if($conn->query($sql)===true){
//     echo "Tabel created Successfuly";
// }else{
//     echo "Error creating table." .$conn->error;
// }

//Insert Values into financial_courses table
$sql = "INSERT INTO financial_courses (Title, Description, Structure, Instructor, Duration, Price, category_id) VALUES 
    ('Introduction to Personal Finance',
    'Learn the fundamentals of managing personal finances, including budgeting, saving, and debt management.',
    'Week 1: Fundamentals of personal finance
    Week 2: Budgeting and expense management
    Week 3: Saving and investment basics
    Week 4: Debt management and credit',
    'John Smith',
    '4',
    '49.00',
    '1'),
    ('Basics of Investing',
    'Understand the key concepts of investing, including stocks, bonds, and mutual funds.',
    'Week 1: Introduction to investment types
    Week 2: Understanding stocks and bonds
    Week 3: Mutual funds and portfolio diversification',
    'Sarah Johnson',
    '3',
    '39.00',
    '1'),
    ('Introduction to Financial Planning',
    'Explore the basics of financial planning, including setting financial goals, retirement planning, and risk management.',
    'Week 1: Setting financial goals
    Week 2: Retirement planning and investment strategies
    Week 3: Risk management and insurance
    Week 4: Estate planning and wealth preservation
    Week 5: Creating a comprehensive financial plan',
    'Michael Thompson',
    '5',
    '59',
    '1'),
    ('Introduction to Credit Management',
    'Understand the basics of credit management, including credit scores, credit reports, and improving creditworthiness',
    'Week 1: Basics of credit scores and reports
    Week 2: Building and improving creditworthiness
    Week 3: Managing credit responsibly',
    'Amanda Wilson',
    '3',
    '39',
    '1'),
    ('Basics of Taxation',
    'Learn the fundamentals of taxation, including income tax, deductions, and tax planning strategies.',
    'Week 1: Understanding income tax fundamentals
    Week 2: Deductions and tax credits
    Week 3: Tax planning strategies
    Week 4: Tax-efficient investment approaches',
    'Robert Johnson',
    '4',
    '49',
    '1'),
    ('Personal Finance for Young Adults',
    'A comprehensive guide to personal finance tailored for young adults, covering budgeting, student loans, and financial goal-setting.',
    'Week 1: Financial challenges faced by young adults
    Week 2: Budgeting and managing student loans
    Week 3: Saving and investing for the future
    Week 4: Navigating insurance and healthcare options
    Week 5: Long-term financial goal setting',
    'Lisa Thompson',
    '5',
    '59',
    '1'),
    ('Stock Market Analysis',
    'Dive deeper into analyzing stocks and understanding market trends to make informed investment decisions.',
    'Week 1: Introduction to stock market analysis
    Week 2: Fundamental analysis and company valuation
    Week 3: Technical analysis and chart patterns
    Week 4: Understanding market trends and indicators
    Week 5: Risk management and portfolio allocation
    Week 6: Developing an investment strategy',
    'Emily Davis',
    '6',
    '79.99',
    '2'),
    ('Real Estate Investment Strategies',
    'Learn about different strategies for investing in real estate, including rental properties, flipping houses, and REITs.',
    'Week 1: Introduction to real estate investment
    Week 2: Rental properties and cash flow analysis
    Week 3: Fix and flip strategies
    Week 4: Real estate investment trusts (REITs) and syndications',
    'Robert Anderson',
    '4',
    '69.00',
    '2'),
    ('Advanced Excel for Financial Analysis',
    'Enhance your financial analysis skills by mastering advanced Excel functions and data manipulation techniques.',
    'Week 1: Advanced Excel functions for financial analysis
    Week 2: Data manipulation and modeling techniques
    Week 3: Creating dynamic financial reports and dashboards',
    'Jennifer Roberts',
    '3',
    '59.99',
    '2'),
    ('Investment Strategies for Wealth Building',
    'Learn advanced investment strategies to grow your wealth and achieve financial independence.',
    'Week 1: Overview of wealth-building strategies
    Week 2: Value investing and fundamental analysis
    Week 3: Growth investing and momentum strategies
    Week 4: Options trading and derivatives
    Week 5: Alternative investments and diversification
    Week 6: Risk management and portfolio rebalancing
    Week 7: Tax-efficient investing and asset protection
    Week 8: Long-term wealth preservation and legacy planning',
    'David Roberts',
    '8',
    '99.99',
    '2'),
    ('Retirement Planning Made Easy',
    'Gain a comprehensive understanding of retirement planning and strategies to secure your financial future.',
    'Week 1: Assessing retirement needs and goals
    Week 2: Social Security and pension planning
    Week 3: Investment strategies for retirement
    Week 4: Tax-efficient retirement planning
    Week 5: Estate planning and legacy considerations',
    'Jennifer Adams',
    '5',
    '69.99',
    '2'),
    ('Advanced Portfolio Management',
    'Dive deep into portfolio management theories and practices for sophisticated investment strategies.',
    'Week 1: Introduction to portfolio management
    Week 2: Asset allocation and diversification
    Week 3: Risk assessment and management
    Week 4: Performance measurement and benchmarking
    Week 5: Advanced investment analysis techniques
    Week 6: Portfolio rebalancing and optimization
    Week 7: Alternative investments and hedge funds
    Week 8: Behavioral finance in portfolio management
    Week 9: Tax planning strategies for portfolios
    Week 10: Portfolio monitoring and reporting',
    'Robert Mitchell',
    '10',
    '129.00',
    '3'),
    ('Estate Planning and Wealth Transfer',
    'Learn advanced estate planning strategies to preserve and transfer wealth across generations.',
    'Week 1: Introduction to estate planning
    Week 2: Wills and trusts
    Week 3: Power of attorney and healthcare directives
    Week 4: Estate tax planning
    Week 5: Charitable giving and philanthropy
    Week 6: Wealth transfer and intergenerational planning',
    'Laura Wilson',
    '6',
    '89.99',
    '3'),
    ('Behavioral Finance and Investor Psychology',
    'Explore the impact of human behavior and psychology on financial decision-making in investment markets.',
    'Week 1: Introduction to behavioral finance
    Week 2: Cognitive biases and decision-making
    Week 3: Emotions and investor behavior
    Week 4: Herding and market sentiment
    Week 5: Overconfidence and risk perception
    Week 6: Prospect theory and loss aversion
    Week 7: Behavioral biases in investment management
    Week 8: Applying behavioral insights to investment strategies',
    'Thomas Baker',
    '8',
    '109.99',
    '3'
)";


if($conn->query($sql)===true){
    echo "Data inserted successfully";
}else{
    echo "Error inserting data:" . $conn->error;
}
$conn->close();

?>
