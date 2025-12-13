SET NAMES utf8mb4;

-- Clients (Physical Persons)
CREATE TABLE physical_clients (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    име VARCHAR(100),                          -- Име
    фамилия VARCHAR(100),                      -- Фамилия
    адрес TEXT,                                -- Адрес
    телефон VARCHAR(20),                       -- Телефон
    имейл VARCHAR(100)                         -- Имейл
);

-- Clients (Legal Entities)
CREATE TABLE legal_clients (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    име_на_фирмата VARCHAR(255),               -- Име на фирмата
    булстат VARCHAR(20),                       -- Булстат
    адрес TEXT,                                -- Адрес
    телефон VARCHAR(20),                       -- Телефон
    имейл VARCHAR(100)                         -- Имейл
);

-- Promotions
CREATE TABLE promotions (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    вид_на_промоцията VARCHAR(50),            -- Вид на промоцията
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    количество INT,                           -- Количество
    оригинална_цена DECIMAL(10,2),             -- Оригинална цена
    промо_цена DECIMAL(10,2)                   -- Промо цена
);

-- Orders
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    номер_на_поръчка VARCHAR(20),              -- Номер на поръчка
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    количество INT,                            -- Количество
    вид_на_отстъпката VARCHAR(50),             -- Вид на отстъпката
    обща_цена DECIMAL(10,2),                   -- Обща цена
    куриер VARCHAR(50),                        -- Куриер
    адрес_за_доставка TEXT                    -- Адрес за доставка
);

-- Order Processing
CREATE TABLE order_processing (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    локация VARCHAR(100),                      -- Локация
    номер_на_поръчка VARCHAR(20),             -- Номер на поръчка
    дата_на_получаване DATE,                   -- Дата на получаване
    дата_на_изпращане DATE,                   -- Дата на изпращане
    статус VARCHAR(50)                         -- Статус
);

-- Category: Учебници и учебни помагала (Textbooks and Educational Materials)
CREATE TABLE textbooks_and_materials (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    вид_артикул VARCHAR(100),                  -- Вид артикул
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    учебен_предмет VARCHAR(100),               -- Учебен предмет
    клас INT CHECK (клас BETWEEN 1 AND 12),    -- Клас (1 до 12)
    издателство VARCHAR(255),                 -- Издателство
    цена DECIMAL(10,2),                        -- Цена
    количество INT                             -- Количество налично
);

-- Category: Химикалки и творчески материали (Pens and Creative Materials)
CREATE TABLE pens_and_creative_materials (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    вид_артикул VARCHAR(100),                  -- Вид артикул
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    цвят VARCHAR(50),                          -- Цвят
    производител VARCHAR(255),                 -- Производител
    цена DECIMAL(10,2),                        -- Цена
    количество INT                             -- Количество налично
);

-- Category: Тетрадки (Notebooks)
CREATE TABLE notebooks (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    вид_артикул VARCHAR(100),                  -- Вид артикул
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    формат VARCHAR(50),                        -- Формат
    размер VARCHAR(50),                        -- Размер
    производител VARCHAR(255),                 -- Производител
    цена DECIMAL(10,2),                        -- Цена
    количество INT                             -- Количество налично
);

-- Category: Материали за офиса (Office Supplies)
CREATE TABLE office_supplies (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    вид_артикул VARCHAR(100),                  -- Вид артикул
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    размер VARCHAR(50),                        -- Размер
    цена DECIMAL(10,2),                        -- Цена
    количество INT                             -- Количество налично
);

-- Category: Книги (Books)
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID
    номер_на_продукт VARCHAR(20),              -- Номер на продукт
    заглавие VARCHAR(255),                     -- Заглавие
    жанр VARCHAR(100),                         -- Жанр
    автор VARCHAR(255),                        -- Автор
    издателство VARCHAR(255),                 -- Издателство
    цена DECIMAL(10,2),                        -- Цена
    количество INT                             -- Количество налично
);
