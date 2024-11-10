public function addCommissionEmployee($name, $address, $companyName, $age) {
    $salary = "";
    while (empty($salary) || !is_numeric($salary)) {
        $salary = readline("Enter Regular Salary: ");
        if (empty($salary)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($salary)) {
            echo "Invalid input. Please enter a valid number for salary.\n";
        }
    }

    $items = "";
    while (empty($items) || !is_numeric($items)) {
        $items = readline("Enter # of Items: ");
        if (empty($items)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($items)) {
            echo "Invalid input. Please enter a valid number for the number of items.\n";
        }
    }

    $commission = "";
    while (empty($commission) || !is_numeric($commission)) {
        $commission = readline("Enter Commission (%): ");
        if (empty($commission)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($commission)) {
            echo "Invalid input. Please enter a valid number for the commission percentage.\n";
        }
    }

    $employee = new CommissionEmployee($name, $address, $companyName, $age, $salary, $items, $commission);
    $employee->setID($this->nextEmployeeID++);
    $this->roster->addEmployee($employee);
    echo "Employee Added!\n";
}

public function addHourlyEmployee($name, $address, $companyName, $age) {
    $hoursWorked = "";
    while (empty($hoursWorked) || !is_numeric($hoursWorked)) {
        $hoursWorked = readline("Enter hours worked: ");
        if (empty($hoursWorked)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($hoursWorked)) {
            echo "Invalid input. Please enter a valid number for hours worked.\n";
        }
    }

    $rate = "";
    while (empty($rate) || !is_numeric($rate)) {
        $rate = readline("Enter rate: ");
        if (empty($rate)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($rate)) {
            echo "Invalid input. Please enter a valid number for rate.\n";
        }
    }

    $employee = new HourlyEmployee($name, $address, $companyName, $age, $hoursWorked, $rate);
    $employee->setID($this->nextEmployeeID++);
    $this->roster->addEmployee($employee);
    echo "Employee Added!\n";
}

public function addPieceWorker($name, $address, $companyName, $age) {
    $items = "";
    while (empty($items) || !is_numeric($items)) {
        $items = readline("Enter # of items: ");
        if (empty($items)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($items)) {
            echo "Invalid input. Please enter a valid number for the number of items.\n";
        }
    }

    $wage = "";
    while (empty($wage) || !is_numeric($wage)) {
        $wage = readline("Enter wage per item: ");
        if (empty($wage)) {
            echo "No input, please try again.\n";
        } elseif (!is_numeric($wage)) {
            echo "Invalid input. Please enter a valid number for wage per item.\n";
        }
    }

    $employee = new PieceWorker($name, $address, $companyName, $age, $items, $wage);
    $employee->setID($this->nextEmployeeID++);
    $this->roster->addEmployee($employee);
    echo "Employee Added!\n";
}
