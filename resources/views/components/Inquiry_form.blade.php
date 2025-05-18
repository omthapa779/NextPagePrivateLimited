 <form action="#" class="w_100 h_fc flex_cl gap_1vw">
    <input type="text" name="fullName" class="input w_100" placeholder="Full Name">
    <input type="email" name="email" class="input w_100" placeholder="Email Address">
    <div class="input_two w_100 h_fc grid col_2 gap_1vw">
        <input type="tel" name="number" class="input w_100" placeholder="Phone Number">
        <input type="text" name="address" class="input w_100" placeholder="Current Address">
    </div>
     <div class="input_two w_100 h_fc grid col_2 gap_1vw">
        <select name="referal" class="input w_100">
            <option value="" disabled selected hidden>How did You find us?</option>
            <option value="Facebook / Instagram"> Facebook / Instagram</option>
            <option value="Friends & Family"> Friends & Family</option>
            <option value="other"> Other </option>
        </select>
        <select name="purpose" class="input w_100">
            <option value="" disabled selected hidden>Purpose of Visit</option>
            <option value="Visit">Visit</option>
            <option value="Interview Date"> Interview Date</option>
            <option value="Student"> Student </option>
            <option value="Immigration"> Immigration </option>
            <option value="Medical"> Medical </option>
        </select>
    </div>
    <textarea name="message" class="input w_100 primary_font" rows="4" placeholder="Your Message here"></textarea>
    <x-button type="submit" variant="button_primary">Send a Message</x-button>
</form>