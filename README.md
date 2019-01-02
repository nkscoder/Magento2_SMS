# Magento2_SMS
#Sms Extension For Magento 2
---
#### Description
Notify your customers through text messages on various Magento Order 
#### Requirements
* **Magento = 2**

### Configuration Instructions
* **Step 1:** Create Folder `Nitesh` in app/code/ 
* **Step 2:** Clone the Git Repository and Download 
  `git clone https://github.com/nkscoder/Magento2_SMS.git`
* **Step 3:** CD into that directory
 `bin/magento module:enable Nitesh_Sms`
 `bin/magento setup:upgrade`
 `bin/magento setup:static-content:deploy`
 `bin/magento setup:di:compile`
