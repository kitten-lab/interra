## Architecture

###### (explained like a mall)

---

## Overview

OIX is structured as a modular system composed of:

- **Commons** (core system)
- **Malls** (routing layer; collections of modules)
- **Ids** (identity layer; defines visual/style system)
- **Modules** (applications)
- **Plugins** (shared capabilities)

---

## Mental Model

Think of the system like a mall:

- **Mall** → a category or grouping of modules
- **Id (Shop-keep)** → defines the visual identity of related modules
- **Module (Shop)** → the actual application

---

## Directory Structure

```
├── platform/
    ├── commons/
        ├── includes/
        ├── shell.php
    ├── ids/
        ├── $keepMark/ 
            ├── *.css
    ├── modules/
        ├── $mallMark/
            ├── $shopMark/
                ├── includes/
	                ├── styles/
	                ├── scripts/
	                ├── logic/
                ├── pages/
    ├── plugins/
        ├── {plugin-name}/
```

---

## Load Order

1. **Commons** (system boot)
2. **Ids** (identity layer)
3. **Module** (content + includes)
4. **Plugins** (optional capabilities)

---

## Modules

Each module lives at:

/modules/{mall}/{keep}/{shop}/

Contains:

- pages/
- includes/
- styles/
- scripts/
- logic/

---

## Plugins

Plugins are reusable capabilities that modules opt into.

Examples:

- grid-canvas
- clipboard
- chart

---

## Naming System

- `mallMark` → routing / grouping
- `keepMark` → identity layer
- `shopMark` → specific module

Combined → unique module identity