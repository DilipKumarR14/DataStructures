package com.test.two.pointer;
import java.util.Iterator;

public class MaxSubArray {

	public static void main(String[] args) {

		int[] list = new int[]{4,2,1,7,8,1,2};
		
		int maxvalue=Integer.MIN_VALUE;
		int winsize=3;
		int currentsum=0;
		
		for (int i = 0; i < list.length; i++) {
			currentsum = currentsum+list[i];
			if (i >= winsize - 1) {
				maxvalue = Math.max(currentsum, maxvalue);
				currentsum = currentsum - list[i-(winsize-1)];
			}
		}
		
		System.out.println(maxvalue);
		
	}

}
