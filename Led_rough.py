import board
import neopixel

pixels = neopixel.NeoPixel(board.D21, 30)
pixels[0] = (255, 0, 0 )
pixels.show()
