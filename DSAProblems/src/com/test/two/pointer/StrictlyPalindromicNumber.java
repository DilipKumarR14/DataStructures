package com.test.two.pointer;

public class StrictlyPalindromicNumber {

	public static void main(String[] args) {

		int n = 4;

//		Boolean palindrome = palindrome(n);
//		System.out.println(palindrome);
//		
		solution1(n);
	}

	public static Boolean palindrome(int num) {

		for (int i = 2; i <= num - 2; i++) {
			String binaryString = convertIntegerToBinary(i, num);
			System.out.println(binaryString);
			int strLength = binaryString.length();
			String reverseStr = "";
			for (int j = (strLength - 1); j >= 0; --j) {
				reverseStr = reverseStr + binaryString.charAt(j);
			}
			if (! binaryString.toLowerCase().equals(reverseStr.toLowerCase())) {
				return false;
			}
		}
		
		return true;


	}
	
	public static String convertIntegerToBinary(int base, int num) {
	    if (base == 0) {
	        return "0";
	    }
	    StringBuilder binaryNumber = new StringBuilder();
	    while (num > 0) {
	        int remainder = num % base;
	        binaryNumber.append(remainder);
	        num /= base;
	    }
	    binaryNumber = binaryNumber.reverse();
	    return binaryNumber.toString();
	}
	
	
	public static boolean check(String n){
        int left = 0;
        int right = n.length()-1;
        while(left<right){
            if(n.charAt(left)!=n.charAt(right))
                return false;
            left++;
            right--;
        }        
        
        return true;
    }

	public static boolean solution1(int n) {
        boolean flag = true;
        for(int i = 2; i < n-1; i++){
            if(!check(Integer.toString(n,i))){
                flag = false;
                break;
            }
        }
        return flag;
    }
	
	 

}
