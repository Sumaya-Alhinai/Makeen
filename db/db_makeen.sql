create TABLE CATEGORY (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,

);


create table todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    is_completed BOOLEAN DEFAULT 0, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CATEGORY_id INT not null references CATEGORY(id)
     ON DELETE CASCADE 
     ON UPDATE CASCADE,


    -- Add any additional fields you need
);


