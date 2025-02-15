@component('mail::message')


# You're Invited to Our Wedding! 💍

**Dear {{ ucwords($name) }},**

We are delighted to invite you to celebrate our wedding day!

## 📅 **Date:** April 11, 2025
## 📍 **Venue:** [The Pulo Events Place Brgy. Ulat, Bayan ng Silang, Cavite](https://maps.app.goo.gl/JwZWoNSoNWxCUGvo7)

@component('mail::button', ['url' => 'https://devocean.website/wedding-invitation.ics'])
Save to Calendar 📅
@endcomponent

---

## 👗 **Wedding Dress Code Guidelines**

### **For Women:**
Kindly wear formal attire or long gown style.
<br>
**Color Palette:** Midnight Blue, Dusty Blue, Brown, or Beige.
Kindly avoid wearing white and close to it.

### **For Men:**
Please wear formal attire, which can include a coat or long-sleeve polo.
**Color Palette:** Dark Gray, Brown, or Dusty Blue.
Kindly avoid wearing Midnight Blue or Dark Blue suits or close to these.

Your presence means so much to us, and we can’t wait to celebrate this special day together in style!

---

## 🎨 **Wedding Motif**

<table align="center" style="text-align: center; margin-top: 20px;">
    <tr>
        <td style="padding: 10px;">
            <div style="background-color: #A4B5C4; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px; text-align: center;">Gray</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #A68868; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px; text-align: center;">Khaki</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #E3C39D; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px; text-align: center;">Beige</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #071739; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px; text-align: center;">Midnight Blue</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #4B6382; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px; text-align: center;">Dusty Blue</p>
        </td>
    </tr>
</table>


<br>
Warm regards,
**JP & EL**

@endcomponent
